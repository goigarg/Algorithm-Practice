nodes = [0, 1, 2]
edges = {0: [1, 2], 1: [2], 2: [3]}

ptr = 0
while(True):
    try:
        nodes[ptr]
    except IndexError:
        break
    ptr = edges[ptr][0]
    print(str(ptr) + " -> ", end="")
