# coding: utf8

import requests


def print_resp(r):
    text = '\n'.join(r.text.split('<br>'))
    print(text)


resp = requests.get(url='http://localhost:8080/server.php?a=123')
print_resp(resp)
# ↑ no request Content-Type
