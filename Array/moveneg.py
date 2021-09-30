arr = [-3, 4, 8, -2, -1, 5, 4, 8]

for i in range(0, len(arr)-1):
    if(arr[i] > 0):
        #num is positive
        temp = arr[i]
        arr[i] = arr[i+1]
        arr[i+1] = temp
print(arr)
