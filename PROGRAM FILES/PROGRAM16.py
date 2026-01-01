num1 = float(input("Enter first number: "))
num2 = float(input("Enter second number: "))
num3 = float(input("Enter third number: "))

biggest = num1
smallest = num1

if num2 > biggest:
    biggest = num2
if num3 > biggest:
    biggest = num3
if num2 < smallest:
    smallest = num2
if num3 < smallest:
    smallest = num3

print(f"The biggest number is: {biggest}")
print(f"The smallest number is: {smallest}")
