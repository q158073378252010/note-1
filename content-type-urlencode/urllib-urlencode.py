# coding: utf8

import urllib
# ↓ python3
import urllib.parse

data = {'x': 456, 'z': {'y': 123}}

# ↓ python2
# s1 = urllib.urlencode(data)
# s2 = urllib.unquote(s1).decode('utf8')

# ↓ python3
s1 = urllib.parse.urlencode(data)
s2 = urllib.parse.unquote(s1)

print(s1)
print(s2)