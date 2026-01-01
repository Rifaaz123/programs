colors=input('Enter colors: ').split()
print('First and last colors are: ',colors[0],' and  ',colors[-1])
colors1=input('Enter colors: ').split()
difference =[]
for a in colors:
	if a not in colors1:
		difference.append(a)
print(difference)
		
