s = input("Enter a string: ")
if len(s) > 1:
    new_string = s[-1] + s[1:-1] + s[0]
else:
    new_string = s

print(new_string)
