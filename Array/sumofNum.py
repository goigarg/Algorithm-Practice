
sum = 6

arr = [1,3,5,7,1]

for i,item in enumerate(arr):
    for j,value in enumerate(arr, start=i):
        if item+value == 6:
            if i != j:
                print('Match' + str(item) + ' ' + str(value))