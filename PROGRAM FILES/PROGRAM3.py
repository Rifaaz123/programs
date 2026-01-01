year= int(input("Enter a year: "))
cur_yr=2025
if cur_yr>year:
    print("Enter a future year!")
else:
    print('Leap year between ', cur_yr,' and ',year,' are: ')
for i in range(cur_yr,year+1):
    if i%4 == 0 and i%100 != 0 or i%400 == 0:
        print(i)

