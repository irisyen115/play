def is_leap_year(y):
    if y % 400 == 0 or (y % 4 == 0 and y % 100 != 0):
        return True
    else: 
        return False
    

year=int(input())
days=[-1,31,28,31,30,31,30,31,31,30,31,30,31]
month=int(input())
date=int(input())
weekday= 4
for i in range(1971,year+1):
    if is_leap_year(i-1)==True:
        weekday=weekday+366    
    else:
        weekday=weekday+365
    print(i,weekday%7)

for j in range(1,month):
    weekday=weekday+days[j]
    if(is_leap_year(year) and 2==j):
        weekday=weekday+1
    
weekday=weekday+date-1
print(weekday % 7)