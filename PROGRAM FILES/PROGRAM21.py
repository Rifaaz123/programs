def add_ing_or_ly(s):
    if s.endswith("ing"):
        return s + "ly"
    else:
        return s + "ing"

string = input("Enter a string: ")

result = add_ing_or_ly(string)
print("Result:", result)
