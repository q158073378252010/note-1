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

headers = {'Content-Type': 'application/json'}

resp = requests.post(
    url='http://localhost:8080/server.php?a=123', json=data, headers=headers)
# ↑ final URL: http://localhost:8080/server.php?a=123
# data is in HTTP body

print_resp(resp)
# ↑ request Content-Type: application/x-www-form-urlencoded
