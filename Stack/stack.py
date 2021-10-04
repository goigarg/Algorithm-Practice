arr = []

limit = 10


def stackPush(data):
    if (len(arr) < limit):
        arr.append(data)
        print("Item Added")
    else:
        print("Stack Overflow")


def stackPop():
    if (len(arr) > 0):
        return arr.pop()
    else:
        return "Stack Underflow"

# stack


stackPush(1)
stackPush(2)

print(stackPop())
print(stackPop())
print(stackPop())
