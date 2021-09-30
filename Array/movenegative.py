arr = [-3, 4, 8, -2, -1, 5, 4, 8]

for i in range(0, len(arr)):
    if(arr[i] > 0):
        #number is positive
        temp = arr[i]
        arr.pop(i)
        arr.append(temp)

print(arr)
