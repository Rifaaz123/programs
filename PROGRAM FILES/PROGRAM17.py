def fibonacci_series(n):
    series = []
    a, b = 0, 1
    for _ in range(n):
        series.append(a)
        a, b = b, a + b
    return series

n = int(input("Enter the number of Fibonacci numbers to generate: "))
fib_sequence = fibonacci_series(n)
print("Fibonacci series:", fib_sequence)
