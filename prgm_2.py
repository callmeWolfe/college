string = input ("Enter a string: ")

first_char = string[0]

result = first_char + string[1:].replace(first_char,'$')

print("Result:",result)

