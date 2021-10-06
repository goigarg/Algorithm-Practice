arr = [1, 2, 3, 4, 5]


def reverse(i):
    if i == 5:
        return
    reverse(i+1)
    print(arr[i])


reverse(0)
