# coding: utf8

import requests


def print_resp(r):
    text = '\n'.join(r.text.split('<br>'))
    print(text)


data = 'abc'

resp = requests.post(url='http://localhost:8080/server_phpinput_read_twice.php?a=123', data=data)
# ↑ final URL: http://localhost:8080/server_phpinput_read_twice.php?a=123
# data is in HTTP body

print_resp(resp)
# ↑ no request Content-Type
