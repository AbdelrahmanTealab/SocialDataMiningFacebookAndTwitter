from tweepy.streaming import StreamListener
from tweepy import OAuthHandler
from tweepy import Stream
import tweepy
import time
import twitter_credentials
import json
import pandas
from pandas.io.json import json_normalize
import csv


class TweetStreamer():
    def __init__(self):
        self.dataframe = pandas.DataFrame()
        pass

    def startStream(self, fetched_tweets_filename, hash_tag_list):
        listen = Listener(fetched_tweets_filename)
        auth = OAuthHandler(twitter_credentials.CONSUMER_KEY, twitter_credentials.CONSUMER_SECRET)
        auth.set_access_token(twitter_credentials.ACCESS_TOKEN, twitter_credentials.ACCESS_TOKEN_SECRET)
        
        api = tweepy.API(auth)
        public_tweets = api.home_timeline()
        for tweet in public_tweets:
            print(tweet.text)
        
        stream = Stream(auth, listen)
        stream.filter(track=hash_tag_list)
        self.dataframe = listen.dataframe

class Listener(StreamListener):

    def __init__(self, tweetsFilename, time_limit=10):
        self.tweetsFilename = tweetsFilename
        self.start_time = time.time()
        self.limit = time_limit
        self.counter = 0
        self.countLimit = 10
        self.dataframe = pandas.DataFrame()

    def on_data(self, data):
        self.counter += 1
        if self.counter<=self.countLimit:
            try:
                jsonData = json.loads(data)
                keys = ("id","user","text", "created_at", "source")
                jsonData = {k: jsonData[k] for k in keys}
                jsonData = json_normalize(jsonData)
                jsonData = jsonData.drop(['user.id','user.id_str','user.name','user.location','user.url','user.description','user.translator_type','user.protected','user.verified','user.followers_count','user.friends_count','user.listed_count','user.favourites_count','user.statuses_count','user.created_at','user.utc_offset','user.time_zone','user.geo_enabled','user.lang','user.contributors_enabled','user.is_translator','user.profile_banner_url','user.profile_background_color','user.profile_background_image_url','user.profile_background_image_url_https','user.profile_background_tile','user.profile_link_color','user.profile_sidebar_border_color','user.profile_sidebar_fill_color','user.profile_text_color','user.profile_use_background_image','user.profile_image_url','user.profile_image_url_https','user.default_profile','user.default_profile_image','user.following','user.follow_request_sent','user.notifications'], axis=1)
                #print(jsonData)
                self.dataframe = self.dataframe.append(jsonData)
                print(self.dataframe)
                self.dataframe.to_csv('tweets.csv',index = False)
                return True
            except BaseException as e:
                print("Error on_data: %s" % str(e))
            return True
        else:
            return False
        return self.dataframe

          

    def on_error(self, status):
        print(status)
