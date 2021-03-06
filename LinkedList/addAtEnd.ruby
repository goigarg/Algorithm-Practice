# Optimize Code
# using tail instead of counting linked list each time

class Node
    attr_accessor :data, :next
    def initialize data
        @data = data
        @next = nil
    end
end

class LinkedList
    attr_accessor :head, :tail
    def initialize 
        @head = nil
        @tail = nil
    end
    def add data
        if @tail == nil
            @tail = @head
        end
        if @head == nil
            @head = Node.new(data)
        else
            @tail.next = Node.new(data)
            @tail = @tail.next
        end
    end

    def printList
        temp = @head
        while(temp)
            puts temp.data
            temp = temp.next
        end
    end

    def delete
        @head = @head.next
    end
end

list = LinkedList.new()

for i in 1..5
    list.add(i)
end

list.delete
list.printList