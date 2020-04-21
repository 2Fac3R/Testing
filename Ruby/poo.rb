class Person

    # constructor
  def initialize(name, age)
    @name = name
    @age = age
  end

    # getters
  def name
    @name
  end

  def age
    @age
  end

    #setters
  def name=(name)
    @name = name
    self
  end

  def age=(age)
    @age = age
    self
  end

  
    # methods

  def self.suggested_names
    ['Pepe', 'Juan', 'Goku']
  end

end

myPerson = Person.new('Gustavo',25)

puts myPerson.name
puts myPerson.age
puts Person.suggested_names