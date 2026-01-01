numbers = [-3, 0, 4, -1, 7, 2]
positive = [n for n in numbers if n > 0]

# (b) Squares of numbers
squares = [n * n for n in numbers]

# Word to check
word = "Hello"

# (c) Vowels in the word
vowels = "aeiouAEIOU"
vowels_in_word = [ch for ch in word if ch in vowels]

# (d) Ordinal values of each letter
ord_values = [ord(ch) for ch in word]

# Print results
print("Positive:", positive)
print("Squares:", squares)
print("Vowels:", vowels_in_word)
print("Ordinal values:", ord_values)
