i = 0
age = int(17) #casting with int(), float(), str()
name = "Sally"
fruits = ["apple", "banana", "watermelon"]

def myFunction():
    """ Documents the function. Docstrings"""
    print("My Function!")
        
print("Name: " + name + ", age: " + str(age))

while i < 3:
    print("While loop", i)
    i = i + 1
    
for i in range(0,3):
    print("For loop", i)
    
for fruit in fruits:
    print(fruit)

if age > 18:
    print("You've already voted, right?.")
elif age == 18:
    print("Now you can vote.")
else:
    print("You cannot vote sorry.")

myFunction()