from animal import Animal

""" My Class 'Dog' """
class Dog(Animal):
    """ Constructor """
    def __init__(self, age, sex, group, myType):
        self._name = None
        self._breed = None 
        self._tricks = []
        self._food = []
        super(age, sex, group, myType, self).__init__()

    
    """ Getters """
    @property
    def name(self):
        return self._name

    @property
    def breed(self):
        return self._breed

    @property
    def tricks(self):
        return self._tricks

    @property
    def food(self):
        return self._food

    """ Setters """
    @name.setter
    def name(self, name):
        self._name = name

    @breed.setter
    def breed(self, breed):
        self._breed = breed

    @tricks.setter
    def tricks(self, trick):
        self._tricks.append(trick)

    @food.setter
    def food(self, food):
        self._food.append(food)

    """ My methods """
    def foo():
        pass
