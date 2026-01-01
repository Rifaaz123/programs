a=input('Enter names: ').split()
print("Length of the list is ",len(a))
count=0
for i in a:
	for j in i:
		if 'a' in j:
			count+=1
print("Occurences of a is ",count)
