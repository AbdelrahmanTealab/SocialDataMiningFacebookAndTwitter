import json
import time
import facebook
from pandas.io.json import json_normalize

#Insert your token here
token ={''} 
graph = facebook.GraphAPI(token)    
fields = ['name,posts,likes']
field = ','.join(fields)
profile = graph.get_object('me',fields=fields)

