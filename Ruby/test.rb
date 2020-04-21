role = :admin
fruits = ['apple', 'banana', 'watermelon']
x = 1

# if role == :admin
#   puts "Admin"
# elsif role == :mod
#   puts "Moderator"
# else
#   puts "Default"
# end

# while x < 5 do
#   puts "#{x}"
#   x += 1
# end

# loop do
#   puts "#{x}"
#   break if x < 5
#   x += 1
# end

# for x in 1..4 do
#   puts "#{x}"
# end

fruits.each { |fruit| puts "#{fruit}" }

4.times { |x| puts "Hi #{x}" }