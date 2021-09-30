def smallestSubWithSum(arr, n, x):
    min_len = n + 1
    for start in range(0, n):
        curr_sum = arr[start]
        if (curr_sum > x):
            return 1
        for end in range(start+1, n):
            curr_sum += arr[end]
            if curr_sum > x and (end - start + 1) < min_len:
                min_len = (end - start + 1)
    return min_len


arr = [1, 4, 45, 6, 10, 19]
x = 51
n1 = len(arr)
res = smallestSubWithSum(arr, n1, x)
if res == n1+1:
    print('0')
else:
    print(res)
