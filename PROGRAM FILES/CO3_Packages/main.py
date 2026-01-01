from graphics import rectangle, circle
from graphics.threeD import cuboid, sphere

length=5
width=3
print("Area of rectangle:", rectangle.area(length,width))
print("Perimeter of rectangle:", rectangle.perimeter(length,width))

radius=4
print("Area of circle:", circle.area(radius))
print("Perimeter of circle:", circle.perimeter(radius))

clength=3
cwidth=2
cheight=4
print("Surface area of cuboid:", cuboid.surfacearea(clength,cwidth,cheight))
print("Volume of cuboid:", cuboid.volume(clength,cwidth,cheight))

sradius=2
print("Surface area of sphere:", sphere.surfacearea(sradius))
print("Volume of sphere:", sphere.volume(sradius))
