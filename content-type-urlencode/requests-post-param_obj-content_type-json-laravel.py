# coding: utf8

import requests


def print_resp(r):
    text = '\n'.join(r.text.split('<br>'))
    print(text)


data = {'a': 456}

headers = {'Content-Type': 'application/json'}

resp = requests.post(
    url='http://localhost:8181/t1', json=data, headers=headers)
print_resp(resp)
