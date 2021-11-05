nodes = [0, 1, 2]
edges = {0: ['1', '2'], 1: ['2'], 2: ['0']}

for i in range(0, len(nodes)):
    print("Enter Edges for Node " + str(i))
    a = str(input())
    edges[i] = []
    for x in a:
        edges[i].append(int(x))

print(edges)
