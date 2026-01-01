a = input("Enter a list of integers separated by spaces: ")
numbers = [int(x) for x in a.split()]
for i in range(len(numbers)):
    if numbers[i] > 100:
        numbers[i] = 'over'

print(numbers)
