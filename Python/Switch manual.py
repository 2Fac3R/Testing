#!/usr/bin/env python
# -*- coding: utf-8 -*-

import urllib


def hexadecimal(texto):
    return texto.encode("hex")


def quote(texto):
    return urllib.quote(texto)


def switch(opcion):
    return {
        "bin2hex": "hexadecimal",
        "encode": "quote",
    }[opcion]


print locals()[switch("encode")]("http://underc0de.org/foro/python/")
