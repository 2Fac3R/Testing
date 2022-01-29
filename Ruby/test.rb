require_relative 'Calculator'

calc = Calculator.new
test_sums = {
    [1, 2] => 3,
    [5, 6] => 11,
    [100, 1] => 101
}

test_sums.each do |input, expected_result|
    if !(calc.sum(input[0], input[1]) == expected_result)
        raise "Test failed for input: #{input}, expected result: #{expected_result}."
    end
end