from dog import Dog

import json

if __name__ == "__main__":
    animal1 = Dog(10, 'female', 'xd', 'otroxs')
    animal1.name = 'Buddy'
    animal1.breed = 'American Bulldog'
    animal1.tricks = ['Roll Over', 'Play Dead']
    animal1.food = ['Some food']
    
    print(animal1.tricks)

    #print(animal1.tricks)
    # for trick in animal1.tricks:
    #     print(trick)

    # jsonStr = json.dumps(animal1.__dict__)
    # print(jsonStr)
