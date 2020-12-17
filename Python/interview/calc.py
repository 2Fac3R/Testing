import math as m

def calc(value, operation):
    switcher = {}
    switcher = {
        1: m.sin(value),
        2: m.cos(value),
        3: m.tan(value),
        4: m.exp(value),
        5: m.log(value)
    }
    return switcher.get(operation, "Invalid option")

def table(value, answer):
    for i in range(1, value + 1):
        print(i, calc(i, answer))

def ask():
    while True:
        value = input("Give me a number ")
        print ("""
        1.Sine
        2.Cosine
        3.Tangent
        4.Exponential
        5.Log
        """)
        answer = input("What would you like to do? ")
        print("Result: ")
        table(value, answer)
ask()