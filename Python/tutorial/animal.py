""" My Animal Class (Abstract) """
class Animal:
    """ Constructor """
    def __init__(self, age, sex, group, myType):
        self._age = age # int years
        self._sex = sex # male or female
        self._group = group # vertebrates and invertebrates
        self._myType = myType # 'dog', 'fish', etc...
    
    """ Getters """
    @property
    def age(self):
        return self._age

    @property
    def sex(self):
        return self._sex

    @property
    def group(self, group):
        return self._group

    @property
    def myType(self):
        return self._myType

    """ Setters """
    @age.setter
    def age(self, age):
        self._age = age
    
    @sex.setter
    def sex(self, sex):
        self._sex = sex
    
    @group.setter
    def group(self, group):
        self._group = group

    @myType.setter
    def myType(self, myType):
        self._myType = myType