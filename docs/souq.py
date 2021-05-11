# -*- coding: utf-8 -*-
# needs modules bs4 and w3lib
import os
import socket
import sys
import time
import urllib.request
from bs4 import BeautifulSoup as bs
import re
opener = urllib.request.build_opener()
opener.addheaders = [('User-agent', 'Mozilla/5.0')]
urllib.request.install_opener(opener)
socket.setdefaulttimeout(10)

from w3lib.url import safe_url_string

url = "https://deals.souq.com/eg-en/televisions/t/9197?q=eyJzIjoic3IiLCJmIjpbXX0%3D"
url = "https://egypt.souq.com/eg-en/laptops/laptops---and---notebooks-75/6-gb%7C8-gb%7C4gb%7C4-gb/16000-70000-EGP/a-t-6580-cp/s/?sortby=bm&"
song_page = None
while song_page is None:
    try:
        song_conn = urllib.request.urlopen(url)
        song_page = song_conn.read()
    except socket.timeout:
        print("Connection timeout Retrying .....")
        time.sleep(1)
song_soup = bs(song_page, 'html.parser')
download_links = song_soup.select('a[class*="img-link"]')
output = ""
for download_link in download_links:
    durl = download_link['href']
    details_page = None
    while details_page is None:
        try:
            song_conn = urllib.request.urlopen(safe_url_string(durl))
            details_page = song_conn.read()
        except socket.timeout:
            print("Connection timeout Retrying .....")
            time.sleep(1)
    details_soup = bs(details_page, 'html.parser')
    title = details_soup.find('div', class_='product-title')
    if not title:
        continue
    title = title.find('h1').text
    description = details_soup.find('div', class_="item-details-mini")
    if not description:
        continue
    description = description.text
    description = re.sub(' +', ' ',description)
    description = os.linesep.join([s.strip()+' ' for s in description.splitlines() if s and s != ' '])
    price = details_soup.find('h3', class_="price")
    if not price:
        continue
    price = price.text
    price = re.sub('\D', '', price)
    price = price[:-2] + '.' + price[-2:]
    price = float(price)
    img = details_soup.find('div', class_="img-bucket")
    if not img:
        continue
    img = img.find('img')['src']
    output += """ [
        "name"=>"{}",
        "description"=>"{}",
        "price"=>"{}",
        "image"=>"{}"
        ],""".format(title.strip().replace('"', ''), description.strip().replace('"', ''), price, img.strip())
open('output', 'w').write(output)
