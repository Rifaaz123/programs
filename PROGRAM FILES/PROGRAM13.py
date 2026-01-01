s = input("Enter a string: ")
if len(s) > 0:
    first_char = s[0]
    # Replace occurrences of first_char with '$' after the first character
    result = first_char + s[1:].replace(first_char, '$')
else:
    result = s
print(result)
