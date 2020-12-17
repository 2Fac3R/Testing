def my_function(phrase):
    my_dict = {}
    split = phrase.split()

    for word in split:
        my_dict[word] = len(word)
    return my_dict

phrase = "Testing my function"

print(my_function(phrase))