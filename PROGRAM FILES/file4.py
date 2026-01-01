import csv
with open ('book.csv') as f:
	csvr = csv.reader(f)
	print('Contents of files are: ')
	for row in csvr:
		print(row)
with open ('book.csv') as f:
	col = csv.reader(f)
	print('The specific colomns are: ')
	for i in col:
		print(i[0],i[1],i[3])
