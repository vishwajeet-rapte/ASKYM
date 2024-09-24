import sys
import base64
import json
from rake_nltk import Rake

allKeywordList = []
contentList = json.loads(base64.b64decode(sys.argv[1]))
r = Rake()

for row in contentList:
    r.extract_keywords_from_text(row['question'])
    strKeyword = r.get_ranked_phrases()[0:3]    # Get keyword of question

    # Store question id and qustion keywords
    questionKeywords = [row['id'], strKeyword]

    # Store question keywords to list
    allKeywordList.append(questionKeywords)

jsonAllKeywords = json.dumps(allKeywordList)    # Convert list to json
print(jsonAllKeywords)
