# coding: utf8

import requests


def print_resp(r):
    text = '\n'.join(r.text.split('<br>'))
    print(text)


data = {
    "a1": 456,
    "a2": "abc",
    "a3": ["a", "b"],
    "a4": [{
        "b1": 1,
        "b2": 2
    }, "c"],
    "a5": {
        "b3": 3,
        "b4": ["c1", 789]
    }
}

resp = requests.get(url='http://localhost:8080/server.php?a=123', data=data)
# ↑ final URL: http://localhost:8080/server.php?a=123&a1=456&a2=abc&a3=a&a3=b&a4=b1&a4=b2&a4=c&a5=b3&a5=b4
# a=123
# a1=456
# a2=abc
# a3=a & a3=b (miss a,b value)
# a4=b1 & a4=b2 & a4=c
# a5=b3 & a5=b4 (no c1)

print_resp(resp)
# ↑ no request Content-Type
