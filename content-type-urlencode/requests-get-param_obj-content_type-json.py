# coding: utf8

import requests


def print_resp(r):
    text = '\n'.join(r.text.split('<br>'))
    print(text)


data = {'a1': 456}

headers = {'Content-Type': 'application/json'}

resp = requests.get(url='http://localhost:8080/server.php?a=123', data=data, headers=headers)
# ↑ final URL: http://localhost:8080/server.php?a=123&a1=456

print_resp(resp)
# ↑ no request Content-Type
