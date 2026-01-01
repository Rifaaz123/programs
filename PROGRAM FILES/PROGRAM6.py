a=list(map(int,input("Enter numbers: ").split()))
b=list(map(int,input("Enter numbers: ").split()))
if len(a)==len(b):
	print('Lists are of same length')
else:
	print('Lists are not of same length')
if sum(a)==sum(b):
	print('Lists sum are same.')
else:
	print('Lists sum are different')
for i in a:
	 if i in b:
	 	print(i,' is present in both.')
