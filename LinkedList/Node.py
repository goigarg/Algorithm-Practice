class Node:
    def __init__(self, data):
        self.data = data
        self.next = None


head = Node(1)
second = Node(2)
third = Node(3)

head.next = second
second.next = third

#insert in starting
newnode = Node(4)
newnode.next = head
head = newnode

#insert in middle

new = Node(5)
new.next = third
second.next = new

temp = head
while(temp):
    print(temp.data)
    temp = temp.next
