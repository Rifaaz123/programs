# Define lambda functions
area_square = lambda s: s ** 2
area_rectangle = lambda l, b: l * b
area_triangle = lambda b, h: 0.5 * b * h

print("Square area (side=4):", area_square(4))
print("Rectangle area (length=5, breadth=3):", area_rectangle(5, 3))
print("Triangle area (base=6, height=4):", area_triangle(6, 4))
