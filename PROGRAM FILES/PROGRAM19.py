N = int(input("Enter the number of steps for the pyramid: "))

for i in range(1, N + 1):
    row = []
    for j in range(1, i + 1):
        row.append(str(i * j))
    print(" ".join(row))
