string = "hello world"  
frequency = {}

for char in string:
    if char in frequency:
        frequency[char] += 1
    else:
        frequency[char] = 1

print("Character frequencies:")
for char in frequency:
    print(f"'{char}': {frequency[char]}")
