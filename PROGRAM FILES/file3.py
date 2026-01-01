import csv
with open("name.csv",'r') as f:
    csvr=csv.reader(f)
    for row in csvr:
        print(row)
