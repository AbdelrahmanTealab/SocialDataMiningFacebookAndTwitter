import FacebookAPI
import TwitterAPI
import json
import time
from TwitterAPI import Listener
from pandas.io.json import json_normalize
from sqlalchemy import create_engine

while(True):


    def Facebook():
        posts = json_normalize(FacebookAPI.profile['posts']['data'])
        print(json.dumps(FacebookAPI.profile['name'],indent=4))
        print(posts)
        posts.to_csv('posts.csv',index=False)
        return posts

    def Twitter():
        hash_tag_list = ["donald trump","hillary clinton","barack obama"]
        fetched_tweets_filename = "tweets.txt"
        twitter_streamer = TwitterAPI.TweetStreamer()
        twitter_streamer.startStream(fetched_tweets_filename, hash_tag_list)
        return twitter_streamer.dataframe


    FacebookDataframe = Facebook()
    TwitterDataframe = Twitter()

    print("uploading to db...")
    engine = create_engine('mysql+mysqlconnector://tealab:thepeepee@socialdatamine.coiukkygfpy7.us-east-2.rds.amazonaws.com/socialdata', echo=False)
    FacebookDataframe.to_sql('Facebook', engine, if_exists='replace')
    TwitterDataframe.to_sql('Twitter',engine,if_exists='replace')
    print("!!Completed!!")
    time.sleep(30)