line = "This is a sample line with some words. This line is just a sample."
words = line.lower().split()

w_counts = {}

for word in words:
    word = word.strip(".,!?;:'\"()[]{}")
    if word:
        w_counts[word] = w_counts.get(word, 0) + 1

for word, count in w_counts.items():
    print(f"'{word}': {count}")
