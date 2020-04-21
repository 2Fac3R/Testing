class Person
  #It creates getters and setters automatically
  attr_accessor :name, :age
  
    # constructor
  def initialize(name, age)
    @name = name
    @age = age
  end

    # methods

  def self.suggested_names
    ['Pepe', 'Juan', 'Goku']
  end

end

myPerson = Person.new('Gustavo',25)
myPerson.age = 30

puts myPerson.name
puts myPerson.age
puts Person.suggested_names