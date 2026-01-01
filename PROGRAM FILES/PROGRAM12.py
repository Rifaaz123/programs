
names_input = input("Enter first names separated by commas: ")
names = [name.strip() for name in names_input.split(',')]
reversed_names = names[::-1]

longest_name = max(names, key=len)
print("Names in reverse order:", reversed_names)
print("The longest name is:", longest_name)
