require_relative 'Calculator'

require "minitest/autorun"

class TestCalculator < Minitest::Test
    def setup
        @calc = Calculator.new
    end

    def test_sum_positives
        result = @calc.sum(1, 3)
        assert_equal result, 4
    end

    def test_sum_negatives
        result = @calc.sum(-1, -3)
        assert_equal result, -4
    end

    def test_substract_positives
        result = @calc.substract(1, 3)
        assert_equal result, -2
    end

    def test_substract_negatives
        result = @calc.substract(-1, -3)
        assert_equal result, 2
    end
end