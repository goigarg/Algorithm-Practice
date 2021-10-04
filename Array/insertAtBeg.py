arr = [1, 2, 3, 4, 5]

item = 0

arr = [item] + arr

arr2 = [1, 2, 3, 4, 5]

arr2.append(0)  # escape out of index
for i in range(4, -1, -1):
    arr2[i+1] = arr2[i]

arr2[0] = item
print(arr2)
